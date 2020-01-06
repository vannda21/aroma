@include('inc.header')
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Decribtion</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
            <td>1</td>
            <th scope="row">Active</th>
            <td>Column content</td>
            <td>coffee</td>
            <td>coffee meal</td>
            <td>
                <a href="{{ ('') }}" class="btn btn-primary">Detail </a>|
                <a href="{{ ('') }}" class="btn btn-success"> Update </a>|
                <a href="{{ ('') }}" class="btn btn-danger">Delete</a>
            </td>
            </tr>
        </tbody>
    </table>
@include('inc.footer')