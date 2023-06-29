<div class="container">
    <h1>Add article</h1>
    <div class="row">
        <form action="{{route('Calculators.calculate')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="first">First Number:</label>
                <input class="form-control" type="text" id="first" name="first"/>
            </div>
            <div class="form-group">
                <label for="second">First Number:</label>
                <input class="form-control" type="text" id="second" name="second"/>
            </div>
            <br>
            <div class="form-group">
                <input type="radio" id="add"
                       name="radio" value="add">
                <label for="add">add</label>
                <br>
                <input type="radio" id="subtract"
                       name="radio" value="subtract">
                <label for="subtract">subtract</label>
                <br>
                <input type="radio" id="multiply"
                       name="radio" value="multiply">
                <label for="multiply">multiply</label>
                <br>
                <input type="radio" id="divide"
                       name="radio" value="divide">
                <label for="divide">divide</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
