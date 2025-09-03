<x-layout>
    
        <div class="d-flex justify-content-center align-items-center"style="flex-direction: column">
            <form action="/student/update/{{$student[0]->id}}" method="POST" style="width:900px; margin-top:50px">
@csrf
                <div class="mb-3 ">
                    <label for="" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id=""
                        value="{{$student[0]->name}}"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id=""
                        value="{{$student[0]->email}}"
                        aria-describedby="emailHelpId"
                        placeholder="abc@mail.com"
                    />
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Number</label>
                    <input
                        type="number"
                        class="form-control"
                        name="number"
                        id=""
                        value="{{$student[0]->number}}"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>
                
                
            </form>
            </div>
</x-layout>