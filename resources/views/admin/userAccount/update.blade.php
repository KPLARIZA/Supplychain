<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __(' Update Accounts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
             
                   <p> <a href="{{ route('admin/userAccount')}}" class ="btn btn-primary" > Back</a></p>
                     
                    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

                <div class="form-area">
                <form action="{{ route('admin/userAccount/update', $useraccounts)}}" method="POST" >
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <label> Name</label>
                                <input type="text" class="form-control" name="name" required value="{{$useraccounts->name}}">
                          
                            </div>
                            <div class="col-md-6">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" required value="{{$useraccounts->address}}"> <!-- Changed input type to text -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" required value="{{$useraccounts->phone}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required value="{{$useraccounts->email}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required value="{{$useraccounts->password}}">
                            </div>
                        </div>
                        <div class="row">
    <div class="col-md-12">
        <label>Account Type</label>
        <select class="form-control" name="AccountType" required value="{{$useraccounts->accountType}}">
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
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>
                        </div>
                    </form>
                </div>

              
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
