<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __(' Create Accounts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
               @if (session()->has('error'))
               <div>
                {{session('error')}}
               </div>
               @endif
                   <p> <a href="{{ route('admin/userAccount')}}" class ="btn btn-primary" >Go Back</a></p>
                     
                    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

                <div class="form-area">
                <form action="{{ route('admin/userAccount/save')}}" method="POST" enctype="miltipart/form-data" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label> Name</label>
                                <input type="text" class="form-control" name="name" required>
                          
                            </div>
                            <div class="col-md-6">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" required> <!-- Changed input type to text -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="row">
    <div class="col-md-12">
        <label>Account Type</label>
        <select class="form-control" name="AccountType" required>
            <option value="Customer Account">Customer Account</option>
            <option value="Supplier Account">Supplier Account</option>
            <option value="Logistics/Carrier Account">Logistics/Carrier Account</option>
            <option value="Employee Account">Employee Account</option>
            <option value="Stores Account">Stores Account</option>
            <option value="Admin Account">Admin Account</option>
        </select>
    </div>
</div>

                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="Register">
                            </div>
                        </div>
                    </form>
                </div>

                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pasword</th>
                            <th scope="col">Account Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                   
                </table>
            </div>
        </div>
    </div>




    <style>
        .form-area {
            padding: 20px;
            margin-top: 20px;
            background-color: #b3e5fc;
            border-radius:10px;
        }

        .bi-trash-fill {
            color: red;
            font-size: 18px;
        }

        .bi-pencil {
            color: green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>


            </div>
        </div>
    </div>
</x-app-layout>
