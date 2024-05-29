<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .dragging {
            opacity: 0.5;
        }
    </style>
</head>
<body class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Total Field</th>
      <th scope="col">Date</th>
      <th scope="col">State</th>
    </tr>
  </thead>
  <tbody id="table-body">
    @foreach ($data as $item)
    <tr draggable="true" ondragstart="handleDragStart(event)" ondragover="handleDragOver(event)" ondrop="handleDrop(event)" ondragend="handleDragEnd(event)">
        @if($item->type=="select")
        <td>
        <label for="consoltant" class="form-label">{{$item->title}}</label>
        <select name="options" id="consoltant" class="form-control">
        @foreach($options as $items)
            <option value={{$items}}>{{$items}}</option>
        @endforeach
        </select> 
        </td>
       
      <td>{{$item->created_at}}</td>
      <td>
        <button  class="btn btn-success">Edit</button>
        <a href="/task2/destroy2/{{$item->id}}">
            <button  class="btn btn-danger">Delete</button>
        </a>
      </td>
        @else
        <td>
        <label class="form-label">{{$item->title}}</label>
        <input type={{$item->type}} class="form-control">
      </td>
      <td>{{$item->created_at}}</td>
      <td>
        <button  class="btn btn-success">Edit</button>
        <a href="/task2/destroy2/{{$item->id}}">
            <button  class="btn btn-danger">Delete</button>
        </a>
      </td>
        @endif
    </tr>
    @endforeach
  </tbody>
</table>

<script>
    let draggedRow = null;

    function handleDragStart(event) {
        draggedRow = event.target;
        event.target.classList.add('dragging');
    }

    function handleDragOver(event) {
        event.preventDefault();
        const targetRow = event.target.closest('tr');
        const tableBody = document.getElementById('table-body');
        if (targetRow && targetRow !== draggedRow) {
            const rows = Array.from(tableBody.querySelectorAll('tr'));
            const draggedIndex = rows.indexOf(draggedRow);
            const targetIndex = rows.indexOf(targetRow);
            if (draggedIndex < targetIndex) {
                tableBody.insertBefore(draggedRow, targetRow.nextSibling);
            } else {
                tableBody.insertBefore(draggedRow, targetRow);
            }
        }
    }

    function handleDrop(event) {
        event.preventDefault();
    }

    function handleDragEnd(event) {
        event.target.classList.remove('dragging');
        draggedRow = null;
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
