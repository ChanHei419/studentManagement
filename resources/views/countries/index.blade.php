{{-- filepath: resources/views/countries.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country-Themed Data Entry</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for country theme -->
    <style>
        body {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVDyBiERh0ZpoFy7uBcL6lLuuxc-l6-OHv7w&s');
            background-size: contain;
            background-attachment: fixed;
            color: #333;
            font-family: 'Georgia', serif;
        }
        .container {
            background-color: rgba(255, 245, 224, 0.95); /* Cream-colored semi-transparent background */
            border-radius: 15px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #8B4513; /* Saddle brown */
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
        .btn-country {
            background-color: #228B22; /* Forest green */
            border: none;
            color: white;
            padding: 10px 20px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-country:hover {
            background-color: #006400; /* Darker green */
        }
        .table {
            background-color: #FFF8DC; /* Cornsilk */
            border: 2px solid #8B4513;
        }
        .table th, .table td {
            border: 1px solid #8B4513;
            padding: 12px;
            text-align: center;
        }
        .table th {
            background-color: #DEB887; /* Burlywood */
            color: #4B2E2A; /* Dark brown */
        }
        .rustic-header {
            background-image: linear-gradient(to bottom, #DEB887, #FFF8DC);
            padding: 20px;
            border-radius: 10px 10px 0 0;
            border-bottom: 3px solid #8B4513;
        }
        .rustic-footer {
            text-align: center;
            margin-top: 30px;
            color: #4B2E2A;
            font-style: italic;
        }
        
    </style>
</head>
<body>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

     <div class="container">
        <div class="rustic-header">
            <h1>Welcome to the CornHub</h1>
            <p class="text-center">Enter your gadar in the rustic table below</p>
        </div>

        <!-- Button to potentially trigger data input actions -->
        <div class="text-center my-4">
         <a href="{{ URL('countries/add') }}" class="addStudentButton">Add New Entry</a>
        </div>

        <!-- Search Form -->
        <form method="GET" action="{{ route('countries.index') }}" class="my-4 text-center">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Search countries..." class="form-control d-inline-block w-auto" />
            <button type="submit" class="btn btn-country ms-2">Search</button>
        </form>

        <!-- Countries Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Country Name</th>
                    <th scope="col">Country Code</th>
                   <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->code }}</td>
                        <td>
                         <a href="{{ URL('countries/edit', $country->id) }}" class="btn btn-primary btn-sm">Edit</a>
                         <form action="{{ URL('countries/delete', $country->id) }}" method="post" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this country?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No countries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="paginationDiv">
            {{$countries->appends(request()->query())->links('pagination::bootstrap-5') }}
        </div>

        <div class="rustic-footer">
            <p>Designed with a touch of country charm</p>
        </div>
    </div>
</body>
</html>