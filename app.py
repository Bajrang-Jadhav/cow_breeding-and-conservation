from flask import Flask, request, jsonify
import requests
import os
from werkzeug.utils import secure_filename

app = Flask(__name__)

UPLOAD_FOLDER = 'uploads'
ALLOWED_EXTENSIONS = {'png', 'jpg', 'jpeg'}

app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER

def allowed_file(filename):
    return '.' in filename and filename.rsplit('.', 1)[1].lower() in ALLOWED_EXTENSIONS

def get_image_response(image_path, prompt):
    """Sends image and prompt to a VLM API."""
    #Replace with your API endpoint and key.
    api_url = "YOUR_VLM_API_ENDPOINT"
    api_key = "AIzaSyDMP_Gul3ZlXEw42WGZ9bY98CL9N6g3Voo"

    try:
        with open(image_path, 'rb') as image_file:
            files = {'image': image_file}
            data = {'prompt': prompt}
            headers = {'Authorization': f'Bearer {api_key}'}
            response = requests.post(api_url, files=files, data=data, headers=headers)

        if response.status_code == 200:
            return response.json().get('response', "No response from API.")
        else:
            return f"API Error: {response.status_code}, {response.text}"
    except Exception as e:
        return f"Error processing image or API request: {e}"

@app.route('/upload', methods=['POST'])
def upload_file():
    if 'image' not in request.files:
        return jsonify({'error': 'No image part'}), 400
    file = request.files['image']
    prompt = request.form.get('prompt', '') #Get the user prompt.

    if file.filename == '':
        return jsonify({'error': 'No selected image'}), 400
    if file and allowed_file(file.filename):
        filename = secure_filename(file.filename)
        filepath = os.path.join(app.config['UPLOAD_FOLDER'], filename)
        file.save(filepath)

        response_text = get_image_response(filepath, prompt)
        os.remove(filepath) #remove file after api call.
        return jsonify({'response': response_text})
    else:
        return jsonify({'error': 'Invalid file type'}), 400

if __name__ == '__main__':
    os.makedirs(UPLOAD_FOLDER, exist_ok=True) #create upload folder if it doesnt exist.
    app.run(debug=True)