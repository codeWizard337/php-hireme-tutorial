<div>
  <form action="#" method="post">
    @csrf

    <div class="row col-5 col-lg-3 form-group mt-4">
      <select class="form-control" id="profileType" name="profileType">
        <option value="education" selected>Education</option>
        <option value="experience">Experience</option>
        <option value="skills">Skills</option>
        <option value="awards">Awards</option>
        <option value="projects">Projects</option>
      </select>
    </div>

    <div class="row">
      <div class="col-9">
        <div class="row mt-1">
          <div class="col-12 col-lg-2">
            Title
          </div>
          <div class="col-12 col-lg-10">
            <input type="text" class="form-control" id="title" name="title" value="">
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12 col-lg-2">
            Description
          </div>
          <div class="col-12 col-lg-10">
            <textarea class="form-control" id="description" rows="3" name="description" value=""></textarea>
          </div>
        </div>
      </div>

    </div>
  </form>
</div>
