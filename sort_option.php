<div class="sort">
<h2>Sort By:</h2>
<div class="form">
      <form action="sort_by.php" method="POST">
      <select class="dropdown" id="Category" required name="category">
        <option value="">Please select a category</option>
        <option value="Painting" name="Painting">Painting</option>
        <option value="Photo" name="Photo">Photo</option>
        <option value="Craft" name="Craft">Craft</option>
        <option value="All" name="All">All</option>
      </select>

      <select class="dropdown" id="price" required name="price">
        <option value="">Please select a range</option>
        <option value="High-low" name="High-low">High-low</option>
        <option value="Low-high" name="Low-high">Low-high</option>
      </select>
    
     <button class="button_login" type="submit" name="search">Search</button>
     </form>
      </div></div>