import joblib
import sys
import json

model = joblib.load("tb_model.pkl")

# ambil input dari terminal
cough_duration = int(sys.argv[1])
fever = int(sys.argv[2])
weight_loss = int(sys.argv[3])
night_sweat = int(sys.argv[4])

data = [[
    cough_duration,
    fever,
    weight_loss,
    night_sweat
]]

prediction = model.predict(data)[0]
probability = model.predict_proba(data)[0][1]

result = {
    "prediction": "positive" if prediction == 1 else "negative",
    "probability": round(float(probability), 2)
}

print(json.dumps(result))