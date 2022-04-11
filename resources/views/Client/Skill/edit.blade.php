

<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Forms /</span> Basic Inputs
  </h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">Default</h5>
        <div class="card-body">
          @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>

          @endforeach

          @endif


          <form method="POST" action="{{ route('update_skill',$skill->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="row g-3">
                <div class="col-12">
                    <input type="text"  name="name" value="{{ $skill->name }}"class="form-control rounded-pill" id="skill" placeholder="Skill">
                </div>

                <div class="col-12">
                    <input type="range"name="progrse"value="{{ $skill->progrse }}" class="form-range" id="customRange1">
                </div>
            <div class="col-12">
                <label for="degree" class="form-label">user_id</label>
                <select id="multiple"name="user_id" class="form-control select2-multiple" multiple>
                    <option   value="{{ $skill->user_id }}"></option>
                    @foreach($User as $host)
                    <option value="{{$host->id}}">{{$host->name}} </option>
                    @endforeach

                </select>
            </div>
            <div class="col-md-6">
              <div class="row">
                <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">is active</label>
                <div class="col-sm-9">
                  <select  name="is_active" id="formtabs-country" class="select2 form-select" data-allow-clear="true">

                    <option @if($skill->is_active==1) selected @endif value="1">مفعل</option>
                    <option  @if($skill->is_active==-1) selected @endif value="-1">معطل</option>
                  </select>
                </div>
              </div>
            </div>



          </div>




        </div>
        <div class="card-footer">
          <input type="submit" name="submit" id="formtabs-first-name"  value="تعديل"class="form-control" placeholder="John" />

        </form>


        </div>
      </div>
    </div>






  </div>

