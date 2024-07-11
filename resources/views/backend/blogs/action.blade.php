<div class="d-flex">
    @can('blog-show')
    <a href="{{ route('blogs.show', $id) }}" class="show btn btn-sm btn-outline-primary mr-2">
        <i class="fas fa-eye"></i>
    </a>
    @endcan
     @can('blog-edit')
        <a href="{{ route('blogs.edit', $id) }}" class="edit btn btn-sm btn-outline-warning mr-2">
            <i class="fas fa-edit"></i>
        </a>
     @endcan
     @can('blog-delete')
        <a href="#" data-id="{{ $id }}" class="delete-btn btn btn-sm btn-outline-danger">
            <i class="fas fa-trash-alt"></i>
        </a>
     @endcan
</div>
