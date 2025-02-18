<?php

namespace App\Repositories;

use App\Models\OrderProducts;
use Illuminate\Support\Facades\DB;

class OrderProductsRepository
{
    protected OrderProducts $orderProducts;

    public function __construct(OrderProducts $orderProducts)
    {
        $this->orderProducts = $orderProducts;
    }

    public function all()
    {
        return $this->orderProducts->all();
    }

    public function create(array $data)
    {
        return $this->orderProducts->create($data);
    }

    public function findById($id)
    {
        return $this->orderProducts->find($id);
    }

    public function update($id, array $data)
    {
        return $this->orderProducts->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->orderProducts->where('id', $id)->update(['status' => 2]);
    }

    public function getByStatus($status_id)
    {
        return $this->orderProducts->where('status_id', $status_id)->get();
    }

    public function findByOrderId($order_id)
    {
        return DB::table('OrderProducts')
            ->join('Product', 'OrderProducts.product_id', '=', 'Product.id')
            ->where('OrderProducts.order_id', $order_id)
            ->select('OrderProducts.*', 'Product.name')
            ->get();
    }

}
