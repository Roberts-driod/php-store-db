<form method="POST" action="/orders/store">

    <label>Customer:</label>
    <select name="customer_id">
        <?php foreach ($customers as $c): ?>
            <option value="<?= $c['Id'] ?>">
                <?= $c['firstname'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label>Status:</label>
    <select name="status">
        <option value="pending">pending</option>
        <option value="shipped">shipped</option>
    </select>

    <label>Comment:</label>
    <textarea name="comments" rows="4" cols="30" placeholder="Enter comment..."></textarea>

    <button type="submit">Create Order</button>
</form>