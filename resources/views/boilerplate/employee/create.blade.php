<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="text-left col-lg-6">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Add Employee Management') }}
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 px-5">
                    <form action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row py-2">
                            <div class="col-lg-6">
                                <label for="">{{__('First Name')}} <span class="text-danger">*</span></label>
                                <input type="text" name="firstname" id="" class="form-control" value="{{old('firstname')}}" placeholder="{{__('First Name')}}">
                                @error('firstname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">{{__('Last Name')}} <span class="text-danger">*</span></label>
                                <input type="text" name="lastname" id="" class="form-control" value="{{old('lastname')}}" placeholder="{{__('Last Name')}}">
                                @error('lastname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-lg-6">
                                <label for="">{{__('DOB')}} <span class="text-danger">*</span></label>
                                <input type="date" name="date_of_birth" id="" class="form-control" value="{{old('date_of_birth')}}" placeholder="{{__('DOB')}}" format="YYYY-MM-DD">
                                @error('date_of_birth')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">{{__('Education')}} <span class="text-danger">*</span></label>
                                <input type="text" name="education_qualification" id="" class="form-control" value="{{old('education_qualification')}}" placeholder="{{__('Education')}}">
                                @error('education_qualification')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-lg-12">
                                <label for="">{{__('Address')}} <span class="text-danger">*</span></label>
                                <textarea name="address" id="" class="form-control" placeholder="{{__('Address')}}" value="{{old('address')}}" cols="30" rows="4"></textarea>
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-lg-6">
                                <label for="">{{__('Mobile')}} <span class="text-danger">*</span></label>
                                <input type="text" name="phone" id="" class="form-control" value="{{old('phone')}}" placeholder="{{__('Mobile')}}">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">{{__('Email')}} <span class="text-danger">*</span></label>
                                <input type="text" name="email" id="" class="form-control" value="{{old('email')}}" placeholder="{{__('Email')}}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-lg-6">
                                <label for="">{{__('Photo')}}</label>
                                <input type="file" name="photo" id="" class="form-control" value="{{old('photo')}}" placeholder="{{__('Photo')}}" accept="image/*">
                                @error('photo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">{{__('Resume')}}</label>
                                <input type="file" name="resume" id="" class="form-control" value="{{old('resume')}}" placeholder="{{__('Resume')}}" accept=".doc, .docx, .pdf">
                                @error('resume')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="py-5 text-right">
                            <hr>
                            <a href="{{route('employee.index')}}" class="btn btn-danger" >{{__('Back')}}</a>
                            <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
