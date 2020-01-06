@include('inc.header')   
    <div class ="container">
        <div class = "row">
            <div class ="col-md-6">
            <form>
            <fieldset>
                <legend>Coffe Shop</legend>
                <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="staticEmail">Email</label>
                <div class="col-sm-10">
                    <input class="form-control-plaintext" id="staticEmail" type="text" readonly="" value="email@example.com">
                </div>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="email" placeholder="Enter title">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Enter price">
                
                
                <div class="form-group">
                <label for="exampleTextarea">Decribtion</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
                <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file">
                <small class="form-text text-muted" id="fileHelp">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
              
                <button class="btn btn-primary" type="submit">Submit</button>
            </fieldset>
            </form>

            </div>
        </div>
    </div>
@include('inc.header')