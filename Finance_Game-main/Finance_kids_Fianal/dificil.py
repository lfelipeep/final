from fastapi import FastAPI
from fastapi.staticfiles import StaticFiles
from fastapi.middleware.cors import CORSMiddleware
from fastapi.responses import FileResponse

app = FastAPI()

# Configuración CORS
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_methods=["*"],
    allow_headers=["*"],
)

# Archivos estáticos
app.mount("/static", StaticFiles(directory="static"), name="static")

# Preguntas DIFÍCILES (Nivel avanzado)
preguntas = [
    {
        "pregunta": "¿Qué estrategia de diversificación reduce mejor el riesgo no sistemático?",
        "opciones": [
            "Invertir en 3 acciones del mismo sector",
            "Inversión en índices globales + bonos corporativos",
            "Comprar criptomonedas emergentes"
        ],
        "respuesta": 1,
        "explicacion": "✅ Correcto! La combinación de índices globales y bonos diversifica across asset classes y geografías."
    },
    {
        "pregunta": "¿Cuál es el efecto del 'writting covered calls' en un portafolio?",
        "opciones": [
            "Aumenta el riesgo y retorno potencial",
            "Limita las ganancias a cambio de ingresos por prima",
            "Protege contra caídas del mercado"
        ],
        "respuesta": 1,
        "explicacion": "Exacto! Los calls cubertos generan ingresos por primas pero limitan las ganancias alcistas."
    },
    {
        "pregunta": "En un escenario de curva de rendimientos invertida, ¿qué estrategia es más adecuada?",
        "opciones": [
            "Carry trade con bonos largos",
            "Invertir en acciones growth",
            "Aumentar posición en bonos cortos y liquidez"
        ],
        "respuesta": 2,
        "explicacion": "🔍 Correcto! Las curvas invertidas suelen preceder recesiones; la liquidez protege el capital."
    }
]

@app.get("/")
def inicio():
    return FileResponse("static/juego_dificil.html")

@app.get("/pregunta_dificil/{id}")
def obtener_pregunta(id: int):
    if 0 <= id < len(preguntas):
        return preguntas[id]
    return {"error": "No hay más preguntas"}

@app.get("/verificar_dificil/{id}/{respuesta}")
def verificar_respuesta(id: int, respuesta: int):
    if 0 <= id < len(preguntas):
        return {
            "correcta": preguntas[id]["respuesta"] == respuesta,
            "explicacion": preguntas[id]["explicacion"]
        }
    return {"error": "Pregunta no válida"}