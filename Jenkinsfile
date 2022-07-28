pipeline {
    agent any

    stages {
           stages {
        stage('Récupération du code sur la branche delivery') {
            
            steps {
                echo 'Cloning the Repository delivery'   
                sh 'git clone '            
            }
        }
        
        
        stage('Build de l’image de l’application') {
            steps {
                echo 'Building the app image ....'
                sh 'docker build -f app/Dockerfile -t app_emp .'
            }
        }
        
        stage('Build de l’image de la base de donnée') {
            steps {
                echo 'Building the database image ....'
                sh 'docker build -f BDD/Dockerfile -t bdd_emp .'
            }
        }

        stage('Déploiement des services via Docker Compose') {
            steps {
                echo 'Service deployment with Docker Compose ....'
                sh 'docker-compose up -d '                
            }
        }

        stage('Test de l’application avec curl et navigateur web') {
            steps {
                echo 'Testing app with curl and web navigator ....'
                sh 'curl http://localhost:1111/ -I'
            }
        }

        stage('Tag des images Docker') {
            steps {
                echo 'Logging to Docker Hub ....'
                sh 'docker login -u moussakane -p Master2@2022'
                echo 'Tagging appli_webe ....'
                sh 'docker tag app_emp moussakane/app_emp:1.0'
               sh 'docker tag bdd_emp moussakane/bdd_emp:1.0'
            }
        }

        stage('Push des images Docker sur Docker Hub') {
            steps {
                echo 'Pushing the app to Docker Hub'
                sh 'docker push moussakane/app_emp:1.0'
               sh 'docker push moussakane/bdd_emp:1.0'
            }
        }
         

    }   
        
    }

