<div>
  <h2>Edit Product</h2>
</div>
<div>
  <a href="{{ route('products.index') }}">Back</a>
</div>

<form action="{{ route('products.update',$product->id) }}"method="POST">
  @csrf
  @method('PUT')

  <div>
    <strong>Name:</storng>
    <input type="text" name="name" value="{{ $product->name }}"placeholder="Name">
  </div>

  <div>
     <strong>Description</strong>
     <textarea style="height:150" name="description"placeholder="description">{{ $product->description }}</textarea>
  </div>

  <div>
    <strong>Price:</storng>
    <input type="namber" name="price" value="{{ $product->price }}">
  </div>

  <div>
    <strong>Category:</strong>
    <select name="category_id">
      @foreach($categoies as $category)
         @if($category->id == $product->category_id)
           <option value="{{ $category->id }}"selected>{{ $category->name }}</option>
         @else
           <option value="{{ $category->id }}">{{ $category->name }}</option>
         @endif
      @endforeach
    </select>
  </div>

  <div>
    <button type="submit">Submit</button>
  </div>

</form>