<section>
    <form action="filter.php">
        <label for="category"></label>
        <select name="category" id="category">
            <option value="">Filter by Category</option>
            <option value="bakery">Bakery</option>
            <option value="dairy">Dairy</option>
            <option value="fruit">Fruit</option>
            <option value="poultry">Poultry</option>
        </select>
        <button type="submit">Filter</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock Quantity</th>
                <th>Dietary Tag</th>
                <th>Select Quantity</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ( $products as $product): ?>
                <tr>
                    <td> <?php echo $product['id'] ; ?></td>
                    <td> <?php echo $product['name'] ; ?></td>
                    <td> <?php echo $product['category'] ; ?></td>
                    <td> <?php echo $product['price'] ; ?></td>
                    <td> <?php echo $product['stock_quantity'] ; ?></td>
                    <td> <?php echo $product['dietary_tag'] ; ?></td>
                    <td> <input type="number" name="quantity" placeholder="select quantity"> </td>
                    <td> <button type="submit">Add to Cart</button></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
        

        
    </table>
</section>