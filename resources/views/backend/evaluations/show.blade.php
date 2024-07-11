@extends('backend.layouts.app')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper mt-3">
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Evaluation Details</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('evaluations.index') }}" class="btn btn-sm btn-outline-primary float-right">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <div class="col-md-4">Intern Name</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->intern->name }}({{ $evaluation->intern->roll_no }})</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Company Name</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->company->name }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Period</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->period }} months</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Total leaves taken </div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->leaves_day }} days</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Maintained contact with supervisor</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->contact_supervisor }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Punctual for works, appointments and attendance</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->punctual }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Reliably performed all job assignments</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->reliably_performed_assignments }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Ability to solve problem</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->ability_solve_problem  }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Organization skills</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->organization_skills }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Communication Skills</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->communication_skills }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Ability to work independently</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->ability_work_independently }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Willingness to learn new tasks</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->willingness_learn_new_tasks }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Eagerness to learn</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->eagerness_to_learn }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Basic Skill</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->basic_skill }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Professional appearance</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->professional_appearance }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Overall assessment of work quality</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->overall_assessment_work_quality }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-11">Please describe the work / tasks that the student accomplished and how well
                                    did the student perform these tasks from a professional view point </div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-1">{{ $evaluation->professional_viewpoint }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-11">Any additional comments on the student eg. About the intern’s work
                                    characteristics, technical Knowledge and skills, ability to adapt to work environment /
                                    hardware / software etc.</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-1">{{ $evaluation->comments_intership }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-11">Any Comments on the internship program. Eg. Technical knowledge and skills,
                                    academic / curricular preparation, methodology, programming, networking etc., to include in
                                    our curriculum to best prepare our students for the industry.</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-1">{{ $evaluation->comments_student }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Other Comments</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->comments }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">This report has been discussed with the student intern</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->discuss_intern }}</div>
                            </div>
                            <p class="card-text">Signature : {{ $evaluation->signature }}</p>
                            <div class="row mb-3">
                                <div class="col-md-4">Supervisor Name</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->company_supervisor->name }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Supervisor Title</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->company_supervisor->position  }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Company Address</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->company->address  }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Contact</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{ $evaluation->contact  }}</div>
                            </div>
                        </div>
                        </hr>
                    </div>
                </div>
        </div>
    </div>
@endsection
