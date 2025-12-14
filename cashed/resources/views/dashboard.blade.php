<x-layout>
    <x-slot:title>Dashboard</x-slot:title>

    <div class="container">
        <div class="row mb-4 text-center">
            <div class="col">
                <div class="card border-0 shadow-sm bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="bi bi-box-seam display-4"></i>
                            <div class="ms-3">
                                <div>Products Terjual</div>
                                <h1 class="fw-bold">{{ number_format($productsSold) }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0 shadow-sm bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar display-4"></i>
                            <div class="ms-3">
                                <div>Pendapatan</div>
                                <h1 class="fw-bold">{{ number_format($revenue) }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0 shadow-sm bg-warning text-dark">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart-check display-4"></i>
                            <div class="ms-3">
                                <div>Orders</div>
                                <h1 class="fw-bold">{{ number_format($ordersCount) }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0 shadow-sm bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="bi bi-box display-4"></i>
                            <div class="ms-3">
                                <div>Products</div>
                                <h1 class="fw-bold">{{ number_format($productsCount) }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h6>{{ count($recentOrders) }} Orders Terkini</h6>

        <div class="card mb-2 border-0 shadow-sm overflow-hidden">
            <table class="table m-0">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>No</th>
                        <th>Customer</th>
                        <th>Payment</th>
                        <th>Total</th>
                        <th>User</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($recentOrders as $order)
                        <tr>
                            <td>Order #{{ $order->id }}</td>
                            <td>{{ $order->customer }}</td>
                            <td>{{ number_format($order->payment) }}</td>
                            <td>{{ number_format($order->total) }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->formatted_created_at }}</td>
                            <td class="text-end">
                                <a href="{{ route('orders.show', ['order' => $order->id]) }}"
                                    class="btn btn-sm btn-primary">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Belum ada order</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
