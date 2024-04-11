<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="text-left col-lg-6">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Employee Management') }}
                </h2>
            </div>
            <div class="text-right col-lg-6">
                <a href="{{route('employee.create')}}" class="btn btn-primary text-right">Add</a>
            </div>
        </div>
    </x-slot>

    @if(session('success'))    
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table id="data_table" class="table table-striped row-border py-12" style="width:100%">
                        <thead>
                            <tr>
                                <th>{{__('Id')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('DOB')}}</th>
                                <th>{{__('Mobile')}}</th>
                                <th>{{__('Email')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($employees as $value)
                            <tr>
                                <td>
                                    {{$value->id}}
                                </td>
                                <td>{{$value->firstname}} {{$value->lastname}}</td>
                                <td>
                                    {{$value->date_of_birth}}
                                </td>
                                <td>
                                    {{$value->phone}}
                                </td>
                                <td>
                                    {{$value->email}}
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropbtn">{{__('Actions')}}</button>
                                        <div class="dropdown-content">
                                            <a href="{{route('employee.edit', ['employee' => $value->id])}}">{{__('Edit')}}</a>
                                            <a href="{{route('employee.destroy', ['employee' => $value->id])}}">{{__('Delete')}}</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
