app.controller("testAndExamsController", 

    function($scope){

        $scope.cards = [

            {
                title:'Simple Test',about:'This test is sooo simple even for a 1 year old',question:'20',
                timeLimit:'15',type:'test',status:'active',dateCreated:'7/12/2022',timeCreated:'03:07',author:'coding_wizard'
            },
            {
                title:'Alien Test',about:'This test is only for aliens from space',question:'700',
                timeLimit:'2',type:'exam',status:'active',dateCreated:'7/12/2029',timeCreated:'03:07',author:'star_wars'
            },

        ];

    }

);