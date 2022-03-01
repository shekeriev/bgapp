pipeline {
  agent any
  stages {
    stage('Init') {
      steps {
        echo 'First step will sleep for 60 sec'
        sleep 60
      }
    }

    stage('Exec') {
      steps {
        sh 'echo hostname'
      }
    }

  }
}