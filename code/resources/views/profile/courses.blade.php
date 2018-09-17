<h3 class="w3l_header mt-4 mb-5">your courses</h3>
<div class="row">
    <div class="col-md-6">
        <h5 class="m-3">Your Posts
            <a href="/posts/create" class="btn btn-primary ml-3">New Post</a>
        </h5>
        <ul class="list-group m-2">
            @foreach ($user->posts as $post)
                <li class="list-group-item"><a href="posts/{{ $post->id }}/edit">{{ $post->title }}</a><br>
                    <small><a class="text-dark" href="posts/{{ $post->id }}"><i class="fa fa-eye"></i> View</a></small> |
                    <small><a class="text-dark" href="posts/{{ $post->id }}/edit"><i class="fa fa-edit"></i> Edit</a></small> |
                    <small><a class="text-danger" href="posts/{{ $post->id }}/delete"><i class="fa fa-remove"></i> Delete</a></small>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-6">
        <div class="card">
            <h5 class="m-3">Enrolled courses</h5>
            <ul class="list-group list-group-flush">
                @foreach($user->courses as $course)
                    <a href="/courses/{{ $course->id }}"><li class="list-group-item"><i class="fa fa-check"></i> {{ $course->title }}</li></a>
                @endforeach
            </ul>
        </div>
    </div>
</div>