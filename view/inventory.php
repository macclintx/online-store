<section>
    <form action="index.php">
        <label for="category">Filter By</label>
        <select name="category" id="category">      
            <option value="bakery">Bakery</option>
            <option value="dairy">Dairy</option>
            <option value="fruit">Fruit</option>
            <option value="poultry">Poultry</option>
        </select>
        <button type="submit">Filter</button>
    </form>

    <?php if( filter_has_var(INPUT_POST, 'category')): ?>
        <?php $filtered = filterByCategory($products,$_POST['category']); ?>
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
            <?php foreach ( $filtered as $product => $detail): ?>
                <tr>
                    <td> <?php echo $detail['id'] ; ?></td>
                    <td> <?php echo $detail['name'] ; ?></td>
                    <td> <?php echo $detail['category'] ; ?></td>
                    <td> <?php echo $detail['price'] ; ?></td>
                    <td> <?php echo $detail['stock_quantity'] ; ?></td>
                    <td> <?php echo $detail['dietary_tag'] ; ?></td>
                    <td> <input type="number" name="quantity" placeholder="select quantity"> </td>
                    <td> <button type="submit">Add to Cart</button></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
        
    <?php endif ;?>


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