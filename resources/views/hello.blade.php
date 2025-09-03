<x-layout>
        <div class="d-flex justify-content-center align-items-center" style="flex-direction: column">
            <form action="/addUser" method="POST" style="width:900px; margin-top:50px">
@csrf
                <div class="mb-3 ">
                    <label for="" class="form-label" >Name</label>
                    <input
                        type="text"
                        class="form-control @error('name')
                            is-invalid
                        @enderror"
                        name="name"
                        id=""
                        
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <div class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                    </div>
                                    </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control 
                    @error('name')
                          is-invalid
                    @enderror
                    "
                        name="email"
                        id=""
                        aria-describedby="emailHelpId"
                        placeholder="abc@mail.com"
                    />
                    <div class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Number</label>
                    <input
                        type="number"
                        class="form-control @error('number')
                        is-invalid
                    @enderror"
                        name="number"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <div class="text-danger">
                    @error('number')
                        {{$message}}
                    @enderror
                    </div>
                    
                </div>
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>
                
                
            </form>
            <div
                class="table-responsive"
            >
            @if(isset($student)&& count($student)>0)
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($student as $student)
                        <tr class="">

                            <td scope="row">{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->number}}</td>
                            <td> <a
                                name=""
                                id=""
                                class="btn btn-danger"
                                href="/student/delete/{{$student->id}}"
                                role="button"
                                >Delete</a
                            >
                            </td>
                            <td> <a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="/edit/{{$student->id}}"
                                role="button"
                                >Edit</a
                            >
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <p>No data found</p>
                @endif
            </div>
            </div>
</x-layout>
       