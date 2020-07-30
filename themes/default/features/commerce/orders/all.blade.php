@extends('features.commerce.layouts.store')

@section('store-content')

    <h3 class="mb-4">Orders</h3>

    <table class="table table-stripped">
        <thead>
            <td>{{ _t('Date') }}</td>
            <td>{{ _t('Transaction ID') }}</td>
            <td>{{ _t('Status') }}</td>
            <td class="text-right">Action</td>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td><a href="{{ route('commerce.account.order', [$order->uuid]) }}">{!! $order->created_at->format('Y-m-d') !!}</a></td>
                    @if (!empty($order->transaction))
                        <td>{!! $order->transaction->uuid !!}</td>
                    @else 
                        <td>{{ _t('Transaction not Found') }}</td>
                    @endif
                    <td>{!! ucfirst($order->status) !!}</td>
                    <td class="text-right">
                        @if ($order->status !== 'cancelled')
                            <a href="{{ route('commerce.account.order.cancel', [$order->uuid]) }}">Cancel Order</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $orders !!}

@endsection

