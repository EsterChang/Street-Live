from flask import Flask, request
app = Flask(__name__)


@app.route('/profile_info')
def profile_info():
    user = request.args.get('id')
    return 'Hello, World!'

if __name__ == '__main__':
    app.run()