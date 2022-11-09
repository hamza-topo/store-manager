<?php

namespace App\Services;

use App\Enums\Invoice as EnumsInvoice;
use App\Models\Invoice;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class InvoiceService implements Service
{

    public function create(array $invoice = []): Invoice
    {
        return Invoice::create($invoice);
    }

    public function edit(int $id, array $invoice = [])
    {
        $newInvoice = $this->findById($id);
        $newInvoice->update($invoice);
        $newInvoice->refresh();
        return $newInvoice;
    }

    public function delete(int $id)
    {
        return Invoice::destroy($id);
    }

    public function findById(int $id)
    {
        return Invoice::find($id);
    }

    public function getInvoicesByStoreId(int $storeId): Collection
    {
        return  Cache::remember(EnumsInvoice::LIST_INVOICES.'_'.$storeId, EnumsInvoice::CACHE_TIME, function () use ($storeId) {
            return  Invoice::where('store_id', $storeId)->with('stores')->get();
        });
    }

    public function getAll()
    {
        return 'this function is diseabled for this method';
    }

    //TODO: clear cache passe store Id
    public function clearCache()
    {
        return 'this function is diseabled for this method';
        // Cache::forget(EnumsInvoice::LIST_EMPLOYERS);
    }

    public function clearCacheByStoreId(int $storeId)
    {
        Cache::forget(EnumsInvoice::LIST_INVOICES.'_'.$storeId);
    }
}
