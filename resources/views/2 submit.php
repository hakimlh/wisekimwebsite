you can use the same name and different value attribute for the submit buttons

// example:

{!! Form::submit( 'Save', ['class' => 'btn btn-default', 'name' => 'submitbutton', 'value' => 'save'])!!}

{!! Form::submit( 'Save draft', ['class' => 'btn btn-default', 'name' => 'submitbutton', 'value' => 'save-draft']) !!}
// Controller:

switch($request->submitbutton) {

    case 'save':
        //action save here
    break;

    case 'save-draft':
        //action for save-draft here
    break;
}
