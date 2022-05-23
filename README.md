## STEPS
1. composer create-project --prefer-dist statamic/statamic lformtest
2. composer require aerni/livewire-forms
3. php please vendor:publish --tag=livewire-forms-config
4. set up env file (APP_URL & MAIL)
5. php please make:user
6. Create form:
	- Set up blueprint
		- Assets Field: cv_file
		- Max files: 1
		- Default container
	- Add email: recipient, html view, text view, markdown: true, attachements: true		
7. php please livewire-forms:setup
	- All default answers
8. Rename home.antlers.html to home.blade.php
	- Set up basic html template with form output:
		<livewire:form handle="test_form" />
9. Update pages collection template
10. Set up email templates
	- form-filled-in.blade.php, form-filled-in_plain.blade.php
11. Set email templates on form
12. npm i
13. npm run dev