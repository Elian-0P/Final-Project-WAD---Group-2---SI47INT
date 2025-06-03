@extends('layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Internships Vacancies</h2>
            <a href="{{ route('vacancies.create') }}" class="btn btn-primary">Add New Internship</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>No.</th>
                        <th>Number of Teachers/Staff</th>
                        <th>School Name</th>
                        <th>Semester 1</th>
                        <th>Semester 2</th>
                        <th>Current S-1 Students</th>
                        <th>Notes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vacancies as $index => $vacancy)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $vacancy->positions_available }}</td>
                        <td>{{ $vacancy->company_name }}</td>
                        <td>{{ $vacancy->status == 'open' ? 'Available' : 'Filled' }}</td>
                        <td>{{ $vacancy->status == 'open' ? 'Available' : 'Filled' }}</td>
                        <td>{{ $vacancy->positions_available }}</td>
                        <td>{{ $vacancy->description }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('vacancies.edit', $vacancy) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('vacancies.destroy', $vacancy) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger ms-1" onclick="return confirm('Are you sure you want to delete this internship?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-md-4">
        <div class="announcements-section">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Announcements</h5>
                <a href="#" class="text-decoration-none view-more">View More</a>
            </div>
            <div class="announcement-cards">
                <div class="announcement-card">
                    <h6>Summer Internship Applications Open</h6>
                    <p>Applications for summer internships are now open. Submit your application before June 15, 2025 to be considered for placement.</p>
                    <div class="announcement-footer">
                        <span class="date">June 1, 2025</span>
                        <a href="#" class="read-more">Read more</a>
                    </div>
                </div>
                <div class="announcement-card">
                    <h6>New Partnership with Riverdale School District</h6>
                    <p>We're excited to announce our new partnership with Riverdale School District, offering 10 new internship positions for the upcoming semester.</p>
                    <div class="announcement-footer">
                        <span class="date">May 28, 2025</span>
                        <a href="#" class="read-more">Read more</a>
                    </div>
                </div>
                <div class="announcement-card">
                    <h6>Internship Orientation Schedule</h6>
                    <p>The orientation schedule for new interns has been released. Please check your email for details about your specific orientation session.</p>
                    <div class="announcement-footer">
                        <span class="date">May 22, 2025</span>
                        <a href="#" class="read-more">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .announcements-section {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .announcement-cards {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .announcement-card {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 15px;
        transition: transform 0.2s;
    }
    .announcement-card:hover {
        transform: translateY(-2px);
    }
    .announcement-card h6 {
        color: #2d3748;
        margin-bottom: 10px;
        font-weight: 600;
    }
    .announcement-card p {
        color: #4a5568;
        font-size: 0.9rem;
        margin-bottom: 15px;
    }
    .announcement-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.85rem;
    }
    .date {
        color: #718096;
    }
    .read-more {
        color: #4299e1;
        text-decoration: none;
    }
    .read-more:hover {
        text-decoration: underline;
    }
    .view-more {
        color: #4299e1;
        font-size: 0.9rem;
    }
    .table-primary {
        background-color: #4a5568;
        color: white;
    }
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
</style>
@endsection 