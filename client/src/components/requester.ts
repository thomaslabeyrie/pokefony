export async function get() {
  const baseUrl = 'http://localhost:8000/'
  const pokemon = 'charizard'

  try {
    const response = await fetch(`${baseUrl}pokemon/${pokemon}`)
    if (!response.ok) {
      throw new Error(`Response status: ${response.status}`)
    }

    return await response.json()
  } catch (error: any) {
    console.error(error.message)
  }
}
