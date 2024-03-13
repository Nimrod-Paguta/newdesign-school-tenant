<x-newuser-layout>

    <style>
        /* Add some basic styling to your table for better design */
        #tenantsTable {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #tenantsTable th,
        #tenantsTable td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        #tenantsTable th {
            background-color: #f2f2f2;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .btn-edit {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>

    <table id="tenantsTable">
        <thead>
            <tr>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Domain</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tenants as $tenant)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                {{$tenant->name}}
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="text-blue-500">
                        {{$tenant->email}}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="text-green-500">
                        @foreach($tenant->domains as $domain)
                        {{ $domain->domain }}{{ $loop->last ? '' : ',' }}
                        @endforeach
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <form action="{{ route('tenants.destroy', $tenant->id) }}" method="post">
                        @csrf
                        @method('DELETE') 
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete"/>
                    </form>

                    <form action="{{ route('tenants.edit', $tenant->id) }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-edit btn-sm">Edit</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.10/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.10/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#tenantsTable').DataTable();
        });
    </script>

</x-newuser-layout>
