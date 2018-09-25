@extends('study.master')

@section('content')

<div class="contact">
  <div class="container-wide">
	<h3 class="w3l_header w3_agileits_header">Add new <span>post</span></h3>
			<div class="inner_w3l_agile_grids-gal">
            </div>
            <div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">

					<div class="agile_mail_grid_right1">
                        {{-- <form action="/posts/{{ $post->id }}/update" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="postTitle">Titles</label>
                                <input type="text" class="form-control" value="{{ $post->title }}" name="postTitle" placeholder="Enter the Titles">
                            </div>
                            <div class="form-group">
                                <label class="label-control" for="courseId">Course:</label>
                                <select class="form-control" sname="courseId" id="exampleFormControlSelect1">
                                    <option>Please select the course --</option>
                                    @foreach ($courses as $course)
                                        <option {{ ($post->course_id == $course->id) ? 'selected' : '' }} value="{{$course->id }}">{{ $course->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                  <textarea class="form-control" name="description" rows="3" placeholder="Enter a short description ...">{{ $post->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="postContent" id="summernote"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </form> --}}
                        <post-editor post-id="{{ $post->id }}" />
					</div>
			</div>
    </div>
</div>

@endsection
