<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BahanAjarController extends Controller
{
    // Inisialisasi data hanya sekali (ketika pertama kali diakses)
    public function boot()
    {
        if (!Cache::has('books')) {
            Cache::put('books', [
                ['id' => 1, 'title' => 'Pemrograman PHP', 'stock' => 15],
                ['id' => 2, 'title' => 'Belajar Laravel', 'stock' => 10],
                ['id' => 3, 'title' => 'Database MySQL', 'stock' => 5],
            ]);
        }

        if (!Cache::has('orders')) {
            Cache::put('orders', []);
        }

        if (!Cache::has('tracking')) {
            Cache::put('tracking', []);
        }
    }

    // Halaman stok
    public function stokList()
    {
        $this->boot();
        $books = Cache::get('books');
        return view('stock.stok_list', compact('books'));
    }

    // Halaman form order
    public function orderForm()
    {
        $this->boot();
        $books = Cache::get('books');
        return view('order.order_form', compact('books'));
    }

    // Proses order
    public function submitOrder(Request $request)
    {
        $this->boot();

        $request->validate([
            'name' => 'required',
            'book_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);

        $books = Cache::get('books');
        $orders = Cache::get('orders');
        $tracking = Cache::get('tracking');

        foreach ($books as &$book) {

            if ($book['id'] == $request->book_id) {

                if ($book['stock'] < $request->quantity) {
                    return back()->with('error', 'Stok tidak mencukupi.');
                }

                // Kurangi stok
                $book['stock'] -= $request->quantity;

                // Tambah order
                $orderId = count($orders) + 1;
                $orders[] = [
                    'id' => $orderId,
                    'name' => $request->name,
                    'book' => $book['title'],
                    'quantity' => $request->quantity
                ];

                // Tambah tracking DO
                $tracking[] = [
                    'do_number' => "DO" . str_pad($orderId, 3, '0', STR_PAD_LEFT),
                    'status' => 'Pesanan Diproses',
                    'updated_at' => now()->format('Y-m-d H:i'),
                ];

                // Simpan kembali ke cache
                Cache::put('books', $books);
                Cache::put('orders', $orders);
                Cache::put('tracking', $tracking);

                return back()->with('success', 'Pesanan berhasil dibuat!');
            }
        }

        return back()->with('error', 'Buku tidak ditemukan!');
    }

    // Tracking DO
    public function trackingDo()
    {
        $this->boot();
        $trackingData = Cache::get('tracking');
        return view('tracking.tracking_do', compact('trackingData'));
    }
}