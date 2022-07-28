pipeline {
    agent any

    stages {
        stage('Build  Image appli') {
            steps {
                dir("app") {
                    sh 'docker build -t appli-emp .'
                }
            }
        }
        stage('Prepare Environement') {
            steps
            {
                script {
                    containerName = sh(returnStdout: true, script: "docker ps -a -f 'name=web' --format '{{.Names}}'").trim()
                    if(containerName == "web")
                    {
                        sh 'docker rm web --force'
                        sh "echo 'Nettoyage environnement OK'"
                    }
                    else
                    {
                        sh "echo 'Ennvironnement OK'"
                    }
                }
            }
        }

        stage('Run Docker Container') {
            steps {
                sh 'docker run -d -p 8090:8080 --name web appli-emp'
                sh 'sleep 15s'
            }
        }
        stage('Test Docker Container') {
            steps {
               sh 'curl http://localhost:8090'
            }
        }

        stage('Clean Environment') {
            steps {
                sh 'docker stop web'
                sh 'docker rm web'
            }
        }
    }
    post {
        success {
            slackSend message:"A new version of simple-app-flask is succesful build - ${env.JOB_NAME} ${env.BUILD_NUMBER} (<${env.BUILD_URL}|Open>)"
        }
    }
}
