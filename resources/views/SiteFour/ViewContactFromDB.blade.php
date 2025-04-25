<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewContactFromDB</title>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>NAME</th>
                <th>PHONE</th>
                <th>EMAIL</th>
                <th>MASSEGE</th>
                <th>IMAGE</th>
                <th>CREATEDAT</th>
                <th>UPDATEDAT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->phone }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->massege }}</td>
                    <!-- <td>{{ $c->image }}</td> -->
                    <td><img width="70px" src="{{ asset('SiteFourUploads/' . $c->image) }}" alt="{{ $c->image }}" title="{{ $c->image }}"></td>
                    <td>{{ $c->created_at }}</td>
                    <td>{{ $c->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <style>
        table{
            border-collapse: collapse ;
            width: 100%;
        }
        th{
            height: 25px;
            text-align: left;
            vertical-align: top;
            background-color:   #800080;
            color: #edd8ed;
        }
        th , td{
            padding: 10px;
            border-bottom: 2px solid #ddd;
        }
        tr:nth-child(even){
            background-color: #edc3ed;
        }
        tr:nth-child(odd){
            background-color: #e3a3e3;
        }
    </style>

</body>
</html>