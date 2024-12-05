<div>
  <h2>Add New Product</h2>
</div>
<div>
  <a href="{{ route('products.index') }}">Back</a>
</div>

<form action="{{ route('products.store') }}" method="POST">
  @csrf
 
  <div>
    <strong>Name:</strong>
    <input type="text" name="name" placeholder="Name">
  </div>

  <div>
    <strong>Description:</strong>
    <textarea style="heght: 150px" name="description" laceholder="Description"></textarea>
  </div>

  <div>
    <strong>Price:</strong>
    <input type="number"name="price"placehoder="Price">
  </div>

  <div>
    <strong>Category:</strong>
    <select name="category_id">
      @foreach($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
  </div>
  
  <div>
    <button type="submit">Submit</button>
  </div>
  
</from>