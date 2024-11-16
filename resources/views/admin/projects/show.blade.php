@extends('layouts.app')

@section('page-title', 'project Show ' . $project)

@section('content')
<main>
    <section id="project-item">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="card pt-2 mb-2">
                        <div class="card-body">
                            <div class="d-flex justify-content-center mb-2">
                                {{-- {{dd( $project->img_url)}} --}}
                                <img src="{{ asset("/storage/" . $project->img_url)}}" alt="{{ $project->name }}" class="img-fluid">
                            </div>
                            <h3 class="card-title mb-3">Name project: {{ $project->name }}</h3>
                            <div class="mb-2">
                                <h5 class="mb-1">Started on: </h5>
                                <p class="card-text">
                                    {{ $project->date }}
                                </p>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Type: </h5>
                                <p class="card-text">
                                    {{ $project->type->name}}
                                </p>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Technologies used: </h5>
                                <ul class="list-unstyled">
                                @forelse ($project->technologies as $technology )
                                    <li>
                                        {{ $technology->name }}
                                    </li>
                                    @empty
                                    <li>
                                        <p>No technologies used</p>
                                    </li>
                                @endforelse
                                </ul>
                            </div>
                            <div class="mb-2">
                                <h5 class="mb-1">Description:</h5>
                                <p class="card-text">
                                    {{ $project->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{route("admin.projects.index")}}" class="btn btn-success">Back to index</a>
            </div>
        </div>
    </section>
</main>
@endsection
