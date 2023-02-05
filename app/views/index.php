<?php

namespace App\views;

class views{

    public $index_page;

    public function displayIndexPage(){

        $this->index_page = '
        
    <!doctype html>

    <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="Oladele John, JohnOx">
            <title>CBT-X</title>

            <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">

            <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">

            <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

            <link rel="manifest" href="site.webmanifest">

            <!-- Bootstrap core CSS -->
            <link href="./app/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

            <link rel="stylesheet" href="./app/assets/font-awesome/css/font-awesome.min.css">

            <link rel="stylesheet" href="./app/assets/angular-loading-bar-master/angular-loading-bar-master/build/loading-bar.css" 
            type="text/css" media="all">

        </head>

        <body ng-app="app">

            <main>

                <heading></heading>

                <ng-view></ng-view>

            </main>

            <!-- JavaScript Bundle with Popper -->
            <script src="./app/assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

            <!-- jquery -->
            <script src="./app/assets/jquery/jquery-3.6.0.min.js"></script>

            <!-- timer plugin -->
            <!-- jquery -->
            <script src="./app/assets/timer-plugin/jquery.simple.timer.js"></script>

            <!-- angular Js -->
            <script src="./app/assets/angular-1.8.2/angular.min.js"></script>

            <script src="./app/assets/angular-1.8.2/angular-route.min.js"></script>

            <script src="./app/assets/angular-loading-bar-master/angular-loading-bar-master/build/loading-bar.min.js"></script>


            <script src="./app/modules/app.module.js"></script>

            <script src="./app/route/route.js"></script>

            <script src="./app/layouts/heading/heading.layout.js"></script>

            <script src="./app/layouts/searchLayout/search.layout.js"></script>

            <script src="./app/layouts/signupLayout/signup.layout.js"></script>

            <script src="./app/layouts/loginLayout/login.layout.js"></script>

            <script src="./app/layouts/signupLayout/success.layout.js"></script>

            <script src="./app/controllers/test-exams-cardsController/test-exams.controller.js"></script>

            <script src="./app/layouts/heading/navbar.layout.js"></script>

            <script src="./app/layouts/dashboardLayout/dashboard.layout.js"></script>

            <script src="./app/layouts/createLayout/create.layout.js"></script>

            <script src="./app/layouts/createLayout/create-success.layout.js"></script>

            <script src="./app/layouts/createLayout/create-success.layout.js"></script>

            <script src="./app/controllers/questionsController/question.controller.js"></script>

            <script src="./app/layouts/set-questionsLayout/set-questions.layout.js"></script>

            <script src="./app/layouts/set-questionsLayout/set-question-modal.layout.js"></script>

            <script src="./app/layouts/deleteLayout/delete.layout.js"></script>

            <script src="./app/layouts/analyticsLayout/analytics.layout.js"></script>

            <script src="./app/controllers/participatedUsersController/participated-users.controller.js"></script>

            <script src="./app/layouts/moreLayout/more.layout.js"></script>

            <script src="./app/layouts/moreLayout/modals/profile.modal.layout.js"></script>

            <script src="./app/layouts/moreLayout/modals/settings.modal.layout.js"></script>

            <script src="./app/layouts/moreLayout/modals/socials.modal.layout.js"></script>

            <script src="./app/layouts/practiceLayout/practice.layout.js"></script>

            <script src="./app/layouts/practiceLayout/end.layout.js"></script>

            <script src="./app/layouts/logoutLayout/logout.layout.js"></script>

            <script src="./app/layouts/searchLayout/search-result.layout.js"></script>

            <script src="./app/controllers/signupController/signup.controller.js"></script>

            <script src="./app/controllers/loginController/login.controller.js"></script>

            <script src="./app/controllers/sessionGuardController/session-guard.controller.js"></script>

            <script src="./app/controllers/testAndExamController/fetchTestAndExam.controller.js"></script>

            <script src="./app/controllers/createTestAndExamController/createTestAndExam.controller.js"></script>

            <script src="./app/controllers/routeTestExamIdController/routeTestExamId.controller.js"></script>

            <script src="./app/controllers/setQuestionsController/setQuestions.controller.js"></script>

            <script src="./app/controllers/questionsController/fetchQuestions.controller.js"></script>

            <script src="./app/controllers/routeDeleteQuestionController/routeDeleteQuestion.controller.js"></script>

            <script src="./app/controllers/routeDeleteQuestionController/routeDeleteAllQuestion.controller.js"></script>

            <script src="./app/layouts/deleteLayout/deleteAllQuestion.layout.js"></script>

            <script src="./app/controllers/routePracticeTestExamController/routePracticeTestExam.controller.js"></script>

            <script src="./app/controllers/practiceTestTimeController/practiceTestTimeController.js"></script>

            <script src="./app/layouts/testLayout/test.layout.js"></script>




            <script src="./app/layouts/practiceQuestionsLayout/question1.layout.js"></script>

            <script src="./app/controllers/practiceQuestionsController/fetchQuestion1.controller.js"></script>


            <script src="./app/layouts/practiceQuestionsLayout/question2.layout.js"></script>

            <script src="./app/controllers/practiceQuestionsController/fetchQuestion2.controller.js"></script>


            <script src="./app/layouts/practiceQuestionsLayout/question3.layout.js"></script>

            <script src="./app/controllers/practiceQuestionsController/fetchQuestion3.controller.js"></script>


            <script src="./app/layouts/practiceQuestionsLayout/question4.layout.js"></script>

            <script src="./app/controllers/practiceQuestionsController/fetchQuestion4.controller.js"></script>
            
            
            <script src="./app/layouts/practiceQuestionsLayout/question5.layout.js"></script>

            <script src="./app/controllers/practiceQuestionsController/fetchQuestion5.controller.js"></script>            


            <script src="./app/controllers/submitQuestionController/submitQuestion.controller.js"></script>            

            <script src="./app/layouts/practiceLayout/infoFromUser.layout.js"></script>            

            <script src="./app/controllers/routeInfoFromUserController/routeInfoFromUser.controller.js"></script>            

            <script src="./app/controllers/fetchInfoFromUserController/fetchInfoFromUser.controller.js"></script>            

            <script src="./app/controllers/submitUserInfoController/submitUserInfo.controller.js"></script>            

            <script src="./app/controllers/fetchUserResultController/fetchResult.controller.js"></script>            

        </body>
    
    </html>
        
        ';

    }

}

?>