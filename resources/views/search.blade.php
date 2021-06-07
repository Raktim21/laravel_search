<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Search</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex mt-4">
        <form action="{{url('/search/result')}}" method="POST">
            @csrf
            <input type="date" name="date" placeholder="Date">
            <input type="number" name="order_id" placeholder="Order ID">
            <input type="text" name="order_by" placeholder="Order by">
            <input type="text" name="depot" placeholder="Depot">
            <input type="number" name="order_value" placeholder="Order value">
            <button class="btn btn-info" type="submit">Search</button>
        </form>

       </div>
       <br>
       <br>
       <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Order ID</th>
                <th scope="col">Order By</th>
                <th scope="col">Depot</th>
                <th scope="col">Order Value</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($deta as $item)
                <tr>
                
                    <td>{{$item->date}}</td>
                    <td>{{$item->order_id}}</td>
                    <td>{{$item->order_by}}</td>
                    <td>{{$item->depot}}</td>
                    <td>{{$item->order_value}}</td>
                    
                  </tr>
                @endforeach
             
              
            </tbody>
          </table>
    </div>
</body>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>
