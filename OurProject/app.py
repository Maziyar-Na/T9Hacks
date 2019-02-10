from flask import Flask, request, render_template

app = Flask(__name__)


@app.route('/')
def home(name=None):
    return render_template("search.html", name=name)

if __name__ == "__main__":
    app.run(host="localhost", port=5000, debug=True)
