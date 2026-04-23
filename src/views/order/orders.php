<?php if (isset($orders) && !empty($orders)): ?>
    <?php foreach ($orders as $order): ?>
        <div style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
            <strong>Order ID:</strong> <?= $order->order_id ?><br>
            <strong>Status:</strong> <?= $order->status ?><br>
            <strong>Date:</strong> <?= $order->order_date ?><br>
            <strong>Comments:</strong> <?= $order->comments ?? 'None' ?>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>No orders found.</p>
<?php endif; ?>

<a href="/orders/create">Create new order</a>