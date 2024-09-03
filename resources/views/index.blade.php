<!DOCTYPE html>
<html>
<head>
    <title>Search Page</title>
    <style>
        .container {
            margin: 20px auto;
            width: 80%;
        }
        .search-form {
            margin-bottom: 20px;
        }
        .result-box {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="{{ route('index') }}" method="GET" class="search-form">
        <input type="text" name="query" placeholder="Search..." value="{{ request('query') }}">
        <button type="submit">Search</button>
    </form>


    @if($users->count() > 0)
        <h2>Search Results:</h2>
        @foreach($users as $user)
            <div class="result-box">
                <h3>{{ $user->name }}</h3>
                <p>{{$user->designation->name}}</p>
                <p>{{$user->department->name}}</p>
            </div>
        @endforeach
    @else
        <p>No results found.</p>
    @endif
</div>


</body>
</html>
