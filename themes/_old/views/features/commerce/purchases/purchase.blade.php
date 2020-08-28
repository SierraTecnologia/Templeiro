@extends('features.commerce.layouts.store')

@section('store-content')

    <h3 class="mb-4">Purchase</h3>

    @if ($purchase->refund_requested && is_null($purchase->refund_date))
        <div class="alert alert-warning">
            You have requested a refund for this purchase
        </div>
    @elseif (($purchase->refund_requested && !is_null($purchase->refund_date)) || !is_null($purchase->refund_date))
        <div class="alert alert-info">
            You were refunded for this purchase
        </div>
    @endif

    <table class="table table-stripped">
        <tr>
            <td>{{ _t('ID') }}</td>
            <td class="text-right">{!! $purchase->uuid !!}</td>
        </tr>
        <tr>
            <td>{{ _t('Date') }}</td>
            <td class="text-right">{!! $purchase->created_at->format('Y-m-d') !!}</td>
        </tr>
        <tr>
            <td>{{ _t('Subtotal') }}</td>
            <td class="text-right">{!! $purchase->subtotal !!}</td>
        </tr>

        @if ($purchase->coupon)
        <tr>
            <td>{{ _t('Coupon') }}</td>
            <td class="text-right">${!! app(\Siravel\Models\Commerce\Coupon::class)->fill(json_decode($purchase->coupon, true))->dollars !!}</td>
        </tr>
        @endif

        <tr>
            <td>{{ _t('Tax') }}</td>
            <td class="text-right">{!! $purchase->tax !!}</td>
        </tr>
        <tr>
            <td>{{ _t('Shipping') }}</td>
            <td class="text-right">{!! $purchase->shipping !!}</td>
        </tr>
        <tr>
            <td>{{ _t('Total') }}</td>
            <td class="text-right">{!! $purchase->total !!}</td>
        </tr>
    </table>

    <table class="table table-stripped">
        <thead>
            <td>{{ _t('Name') }}</td>
            <td>{{ _t('Code') }}</td>
            <td class="text-right">Details</td>
        </thead>
        <tbody>
            @foreach (json_decode($purchase->cart) as $product)
                <tr>
                    <td><a href="{{ $product->href }}">{!! $product->name !!}</a></td>
                    <td>{!! $product->code !!}</td>
                    @if (! empty($product->file))
                        <a class="btn btn-secondary btn-sm raw-margin-top-24" href="{!! $product->file_download_href !!}">
                        <span class="fa fa-download"></span> Download</a>
                    @else
                    <td class="text-right">{!! $product->details !!}</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

