@include('inc.header')   
    <div class ="container">
        <div class = "row">
            <div class ="col-md-6">
            <form class = "form-horizontal" method="POST" action="{{url('/edit',array($products->id))}}" enctype="multipart/form-data">
            {{ csrf_field()}}
            <fieldset>
                <legend>Coffe Shop</legend>

                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" id="title" name="title" value="<?php echo $products->title?>" aria-describedby="emailHelp" type="text" placeholder="Enter title">
                </div>

                <div class="form-group">
                    <label for="exampleSelect1">Drink Type</label>
                    <select class="form-control" id="type" name = 'type'>
                        <option>Hot</option>
                        <option>Ice</option>
                        <option>frappe</option>
                    </select>
                </div>

                <div class="form-group">
                <label for="pricel">PriceL</label>
                <input class="form-control" id="pricel" name="pricel" value="<?php echo $products->pricel?>" type="integer" placeholder="Enter price">
                </div>

                <div class="form-group">
                <label for="priceM">PriceS</label>
                <input class="form-control" id="priceM" name="priceM" value="<?php echo $products->priceM?>" type="integer" placeholder="Enter price">
                </div>

                <div class="form-group">
                <label for="priceS">PriceS</label>
                <input class="form-control" id="priceS" name="priceS" value="<?php echo $products->priceS?>" type="integer" placeholder="Enter price">
                </div>
                
                <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" type="text" placeholder="Description" ><?php echo $products->description?></textarea>
                </div>
                <div class="form-group">
                <label for="image">File input</label>
                <img src="{{URL::to('/')}}/uploads/products/{{$products->image}}"
              class="img-thumbnail" width="100"/><br/>
                <input class="form-control-file" value="{{$products->image}}" id="image" name="image" aria-describedby="fileHelp" type="file">
                <small class="form-text text-muted" id="fileHelp">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
                <a href="{{ (url('/home')) }}" class="btn btn-primary" >Back</a>
            </fieldset>
            </form>

            </div>
        </div>
    </div>