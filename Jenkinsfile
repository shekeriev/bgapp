pipeline {
  agent any
  stages {
    stage('Init') {
      parallel {
        stage('stream 1') {
          steps {
            echo 'First step will sleep for 60 sec'
            sleep 60
          }
        }

        stage('stream 2') {
          steps {
            echo 'This will execute in parallel'
          }
        }

        stage('stream 3') {
          steps {
            sh 'ps ax | wc -l'
          }
        }

      }
    }

    stage('Exec') {
      steps {
        sh 'hostname'
      }
    }

  }
}