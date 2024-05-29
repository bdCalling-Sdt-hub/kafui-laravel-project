<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
    <form action="/task/store" method="POST">
        @csrf
        <div>
            <label for="consoltant" class="form-label">Sales Consoltant</label>
            <select name="consoltant" id="consoltant" class="form-control">
                @foreach($data as $item)
                <option value={{$item}}>{{$item}}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label for="date" class="form-label">Site Visited Date</label>
            <input type="date" name="site_v_date" id="date" class="form-control">
        </div>

        <div>
            <label for="name" class="form-label">Customer Name</label>
            <input type="name" name="customer_name" id="name" class="form-control">
        </div>

        <div>
            <label for="name" class="form-label">Job Prefarence</label>
            <input type="name" name="job_preference" id="name" class="form-control">
        </div>

        <div>
            <label for="name" class="form-label">Instaletion addess</label>
            <input type="name" name="ins_address" id="name" class="form-control">
        </div>

        <div class="mb-2">
        <label for="consoltant" class="form-label">Parking</label>
        <select name="parking" id="consoltant" class="form-control">
            @foreach($parking as $item)
            <option value={{$item}}>{{$item}}</option>
            @endforeach
        </select>
        </div>

        <div>
            <input type="submit" placeholdr="submit" class="btn btn-success">
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>