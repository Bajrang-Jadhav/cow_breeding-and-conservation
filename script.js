const apiKey = 'AIzaSyB-IM7gMeM-t8w80-3pdkmxqHTTNrmJFok'; // Replace this with your actual Gemini API key

document.getElementById('recognizeBtn').addEventListener('click', async () => {
  const fileInput = document.getElementById('imageInput');
  const resultDiv = document.getElementById('result');

  if (!fileInput.files[0]) {
    resultDiv.textContent = 'Please upload a cow image.';
    return;
  }

  const file = fileInput.files[0];
  const reader = new FileReader();

  reader.onloadend = async () => {
    const base64Image = reader.result.split(',')[1];

    const requestBody = {
      contents: [
        {
          role: "user",
          parts: [
            {
              text: `You are an expert in livestock identification. Look at the following cow image and determine its breed.
Please return the most likely breed name in plain text (e.g., "Jersey", "Holstein Friesian", "Gir", etc.) for more information chat with us!.
If unclear, respond with "Breed not confidently identifiable."`
            },
            {
              inline_data: {
                mime_type: file.type,
                data: base64Image
              }
            }
          ]
        }
      ]
    };

    resultDiv.textContent = 'Identifying breed...';

    try {
      const response = await fetch(
        'https://generativelanguage.googleapis.com/v1/models/gemini-2.0-flash:generateContent?key=' + apiKey,
        {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(requestBody)
        }
      );

      if (!response.ok) {
        const errorText = await response.text();
        console.error('API Error Response:', errorText);
        resultDiv.textContent = `API error: ${response.status} - ${response.statusText}`;
        return;
      }

      const data = await response.json();
      console.log('Full Gemini 1.5 Response:', data);

      const outputText = data?.candidates?.[0]?.content?.parts?.[0]?.text;

      if (outputText) {
        resultDiv.textContent = `Breed: ${outputText}`;
      } else {
        resultDiv.textContent = 'Breed not confidently identifiable.';
      }
    } catch (error) {
      console.error('Request failed:', error);
      resultDiv.textContent = 'Network or API request failed.';
    }
  };

  reader.readAsDataURL(file);
});
