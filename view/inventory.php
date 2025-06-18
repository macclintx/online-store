<section>
    <form action="index.php" method="post">
        <label for="category">Filter By</label>
        <select name="category" id="category">  
            <option value="all">All</option>    
            <option value="bakery">Bakery</option>
            <option value="dairy">Dairy</option>
            <option value="fruit">Fruit</option>
            <option value="poultry">Poultry</option>
        </select>
        <input type="submit" name="submit" value="Filter">
    </form>

    <?php if(!empty($filt)   )  : ?>
       
        
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
            <?php foreach ($filt as $product => $detail) : ?>
            <?php foreach ($detail as $details) : ?>
                 <tr>
                    <td> <?php echo $details["id"]; ?></td>
                    <td> <?php echo $details['name'] ; ?></td>
                    <td> <?php echo $details['category'] ; ?></td>
                    <td> <?php echo $details['price'] ; ?></td>
                    <td> <?php echo $details['stock_quantity'] ; ?></td>
                    <td> <?php echo $details['dietary_tag'] ; ?></td>
                    <td> <input type="number" name="quantity" placeholder="select quantity"> </td>
                    <td> <button type="submit">Add to Cart</button></td>

                </tr>
            <?php endforeach ; ?>
            <?php endforeach ; ?>
            
        </tbody>
    </table>
    <?php else :?>

        <?php $errors [] = 'Filter Not Set'; ?>
   
    <?php endif ; ?>
</section>